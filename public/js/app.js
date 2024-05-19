document.getElementById('languageSwitcher').addEventListener('change', function() {
    var locale = this.value;
    var switchUrl = this.getAttribute('data-url');
    var url = switchUrl.replace(':locale', locale);
    window.location.href = url;
});
