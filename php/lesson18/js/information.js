let baseURL = location.href;
let url = baseURL + 'api/informations.php';

let request = new XMLHttpRequest();
request.open('GET', url);
request.send();

let informations;
request.onload = () => {
    let json = request.response;
    // JSONデコード
    informations = JSON.parse(json);
    console.log(informations);

    render();
}

// HTMLレンダリング
render = () => {
    let root = document.querySelector('#information');
    let ul = document.createElement('ul');
    ul.classList.add('list-group');
    informations.forEach(information => {
        let li = document.createElement('li');
        li.classList.add('list-group-item');
        li.innerHTML = information;
        ul.append(li);
    });
    root.append(ul);
}