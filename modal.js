'use strict'

    const dltbtns = document.querySelectorAll('#delete');
    const mask = document.getElementById('mask');
    const cancel = document.getElementById('cancel');

    dltbtns.forEach(dltbtn =>{
        dltbtn.addEventListener('click',() => {
            window.location.href = 'myProjectList_delete.php';
        });
    });
    mask.addEventListener('click',() => {
        window.location.href = 'myProjectList.php';
    });
    cancel.addEventListener('click',() => {
        window.location.href = 'myProjectList.php';
    });
