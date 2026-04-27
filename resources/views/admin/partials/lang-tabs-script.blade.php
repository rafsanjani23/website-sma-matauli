{{-- Reusable script untuk handle switching tabs Indonesia/English di form admin --}}
<script>
    document.querySelectorAll('[data-lang-tabs]').forEach(group => {
        const buttons = group.querySelectorAll('[data-tab-btn]');
        const panes = group.querySelectorAll('[data-tab-pane]');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tabBtn;
                buttons.forEach(b => {
                    const active = b.dataset.tabBtn === target;
                    b.classList.toggle('border-red-800', active);
                    b.classList.toggle('text-red-800', active);
                    b.classList.toggle('border-transparent', !active);
                    b.classList.toggle('text-gray-500', !active);
                });
                panes.forEach(p => {
                    p.classList.toggle('hidden', p.dataset.tabPane !== target);
                });
            });
        });
    });
</script>
