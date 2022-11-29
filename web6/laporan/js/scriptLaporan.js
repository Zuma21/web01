function comein(){
    const title = document.querySelector('.title');
    const greading = document.querySelector('.greading');
    const btn = document.querySelector('.btn');
    const table = document.querySelector('.table');
    const btnTambah = document.querySelector('.btnTambah')

    title.classList.add('title-come');
    greading.classList.add('dnone');
    btn.classList.add('dnone');
    table.classList.toggle('dnone');
    btnTambah.classList.toggle('dnone');
}