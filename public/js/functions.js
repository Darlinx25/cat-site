document.getElementById('more-btn').onclick = function () {
    document.getElementById('second-kitty').classList.remove('hide');
    document.getElementById('third-kitty').classList.add('hide');
    document.getElementById('more').classList.add('hide');
    document.getElementById('even_more-btn').classList.remove('hide');
};

document.getElementById('less-btn').onclick = function () {
    document.getElementById('second-kitty').classList.add('hide');
    document.getElementById('third-kitty').classList.add('hide');
    document.getElementById('more').classList.remove('hide');
    document.getElementById('even_more-btn').classList.add('hide');
};

document.getElementById('even_more-btn').onclick = function () {
    document.getElementById('third-kitty').classList.remove('hide');
    document.getElementById('even_more-btn').classList.add('hide');
};

document.getElementById('comment-btn').onclick = function () {
    document.getElementById('respuesta').classList.toggle('hide');

};




/*form.addEventListener('submit', async function (e) {

    //e.preventDefault();

    const formData = new FormData(form);

    const response = await fetch("kitty.php", {
        method: "POST",
        body: formData
    });

    const text = await response.text();

    document.getElementById('respuesta').classList.remove('hide');
    form.reset();

});*/