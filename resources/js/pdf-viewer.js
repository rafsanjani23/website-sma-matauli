import { getDocument, GlobalWorkerOptions } from 'pdfjs-dist';

GlobalWorkerOptions.workerSrc = new URL('pdfjs-dist/build/pdf.worker.min.mjs', import.meta.url).toString();

const viewer = document.querySelector('[data-pdf-viewer]');

if (viewer) {
    const sourceUrl = viewer.dataset.pdfUrl;
    const pagesContainer = viewer.querySelector('[data-pdf-pages]');
    const status = viewer.querySelector('[data-pdf-status]');
    const blockedKeys = new Set(['a', 'c', 'p', 's', 'u', 'x']);

    const preventDefault = (event) => event.preventDefault();

    ['contextmenu', 'copy', 'cut', 'dragstart', 'selectstart'].forEach((eventName) => {
        document.addEventListener(eventName, preventDefault);
    });

    document.addEventListener('keydown', (event) => {
        const key = event.key.toLowerCase();

        if ((event.ctrlKey || event.metaKey) && blockedKeys.has(key)) {
            event.preventDefault();
        }
    });

    const setStatus = (message) => {
        status.textContent = message;
        status.classList.remove('hidden');
        pagesContainer.classList.add('hidden');
    };

    const renderPage = async (pdf, pageNumber, pageShell) => {
        const page = await pdf.getPage(pageNumber);
        const canvas = pageShell.querySelector('canvas');
        const context = canvas.getContext('2d', { alpha: false });
        const baseViewport = page.getViewport({ scale: 1 });
        const availableWidth = Math.min(pagesContainer.clientWidth || viewer.clientWidth, 1040);
        const scale = availableWidth / baseViewport.width;
        const viewport = page.getViewport({ scale });
        const outputScale = Math.min(window.devicePixelRatio || 1, 2);

        canvas.width = Math.floor(viewport.width * outputScale);
        canvas.height = Math.floor(viewport.height * outputScale);
        canvas.style.width = `${Math.floor(viewport.width)}px`;
        canvas.style.height = `${Math.floor(viewport.height)}px`;

        context.setTransform(outputScale, 0, 0, outputScale, 0, 0);
        await page.render({ canvasContext: context, viewport }).promise;

        pageShell.removeAttribute('aria-busy');
        pageShell.classList.remove('min-h-96');
        canvas.classList.remove('opacity-0');
    };

    const createPageShell = (pageNumber) => {
        const pageShell = document.createElement('section');
        pageShell.className = 'mx-auto min-h-96 w-full max-w-5xl overflow-hidden rounded-lg border border-slate-200 bg-slate-50 shadow-sm';
        pageShell.setAttribute('aria-label', `Halaman ${pageNumber}`);
        pageShell.setAttribute('aria-busy', 'true');

        const pageHeader = document.createElement('div');
        pageHeader.className = 'border-b border-slate-200 bg-slate-100 px-4 py-2 text-xs font-semibold uppercase text-slate-500';
        pageHeader.textContent = `Halaman ${pageNumber}`;

        const canvas = document.createElement('canvas');
        canvas.className = 'mx-auto block h-auto max-w-full select-none bg-white opacity-0 transition-opacity duration-300';
        canvas.setAttribute('aria-hidden', 'true');

        pageShell.append(pageHeader, canvas);

        return pageShell;
    };

    const loadDocument = async () => {
        try {
            const response = await fetch(sourceUrl, {
                cache: 'no-store',
                credentials: 'same-origin',
                headers: {
                    Accept: 'application/pdf',
                    'X-PDF-Viewer': 'canvas',
                },
            });

            if (!response.ok) {
                throw new Error('Failed to load document.');
            }

            const data = await response.arrayBuffer();
            const pdf = await getDocument({ data }).promise;

            pagesContainer.textContent = '';
            status.classList.add('hidden');
            pagesContainer.classList.remove('hidden');

            for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber += 1) {
                const pageShell = createPageShell(pageNumber);
                pagesContainer.appendChild(pageShell);
                await renderPage(pdf, pageNumber, pageShell);
            }
        } catch (error) {
            setStatus('Dokumen tidak dapat dimuat.');
        }
    };

    loadDocument();
}
