function report(el)
{
    /* alert('ok'); */
    let id = el.parentNode.parentNode.parentNode.id;
    let url = '/PROJET4/post/reportComment/' + id;
    $.get(url, data =>{
        console.log(data);
        el.nextSibling.innerHTML = data;
    });
}

$('form button[type=submit]').click(function () {
    tinyMCE.triggerSave();
});