{{-- Quill rich text editor untuk semua <textarea data-rich-editor> --}}
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
<style>
    .rich-editor-wrapper {
        background: #fff;
    }
    .rich-editor-wrapper .ql-toolbar.ql-snow {
        border: 1px solid #d1d5db;
        border-bottom: 0;
        border-radius: 0.75rem 0.75rem 0 0;
        background: #f9fafb;
    }
    .rich-editor-wrapper .ql-container.ql-snow {
        border: 1px solid #d1d5db;
        border-radius: 0 0 0.75rem 0.75rem;
        font-size: 0.875rem;
        font-family: inherit;
    }
    .rich-editor-wrapper .ql-editor {
        min-height: 180px;
        color: #1f2937;
    }
    .rich-editor-wrapper .ql-editor.ql-blank::before {
        font-style: normal;
        color: #9ca3af;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
    (function () {
        if (typeof Quill === 'undefined') return;

        const TOOLBAR = [
            [{ header: [1, 2, 3, false] }],
            [{ size: ['small', false, 'large', 'huge'] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ color: [] }, { background: [] }],
            [{ list: 'ordered' }, { list: 'bullet' }],
            [{ align: [] }],
            ['link', 'blockquote'],
            ['clean'],
        ];

        function isEmpty(html) {
            const stripped = html
                .replace(/<p><br\s*\/?><\/p>/gi, '')
                .replace(/<[^>]+>/g, '')
                .replace(/&nbsp;/g, '')
                .trim();
            return stripped.length === 0;
        }

        document.querySelectorAll('textarea[data-rich-editor]').forEach((textarea) => {
            if (textarea.dataset.richEditorInitialized === 'true') return;
            textarea.dataset.richEditorInitialized = 'true';

            const wasRequired = textarea.hasAttribute('required');
            if (wasRequired) {
                textarea.removeAttribute('required');
                textarea.dataset.richEditorRequired = 'true';
            }

            const wrapper = document.createElement('div');
            wrapper.className = 'rich-editor-wrapper';
            const editor = document.createElement('div');
            wrapper.appendChild(editor);

            textarea.style.display = 'none';
            textarea.parentNode.insertBefore(wrapper, textarea.nextSibling);

            const quill = new Quill(editor, {
                theme: 'snow',
                placeholder: textarea.getAttribute('placeholder') || '',
                modules: { toolbar: TOOLBAR },
            });

            if (textarea.value && textarea.value.trim() !== '') {
                quill.clipboard.dangerouslyPasteHTML(textarea.value);
            }

            const sync = () => {
                const html = quill.root.innerHTML;
                textarea.value = isEmpty(html) ? '' : html;
            };

            quill.on('text-change', sync);

            const form = textarea.closest('form');
            if (form) form.addEventListener('submit', sync);
        });
    })();
</script>
