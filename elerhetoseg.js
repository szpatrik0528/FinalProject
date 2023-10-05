document.getElementById('messageButton').addEventListener('click', function() {
    var email = 'szivospatrikdavid@gmail.com';
    var subject = 'Probléma';
    var body = 'Kedves \n\n';

    // E-mail link létrehozása
    var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

    // E-mail kliens megnyitása
    window.location.href = mailtoLink;
});
document.getElementById('messageButton1').addEventListener('click', function() {
    var email = 'sandornorbi7@gmail.com';
    var subject = '';
    var body = '';

    // E-mail link létrehozása
    var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

    // E-mail kliens megnyitása
    window.location.href = mailtoLink;
});
document.getElementById('messageButton2').addEventListener('click', function() {
    var email = 'pistipisti57@gmail.com';
    var subject = '';
    var body = '';

    // E-mail link létrehozása
    var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

    // E-mail kliens megnyitása
    window.location.href = mailtoLink;
});