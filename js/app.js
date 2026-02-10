function toggleAgenticLang() {
    document.body.classList.toggle('show-en');
    // Save preference
    const isEn = document.body.classList.contains('show-en');
    localStorage.setItem('agentic-lang', isEn ? 'en' : 'pl');
}

// Restore preference on load
(function() {
    const sr = localStorage.getItem('agentic-lang');
    if(sr === 'en') document.body.classList.add('show-en');
})();
