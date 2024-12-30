const dataPortofolioWeb = [
    {
        image: './assets/porto/porto_web1.png',
        title: 'FizzMate',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: 'https://github.com/Jong44/FizzMate',
        direct: 'https://fizz-mate.vercel.app/'
    },
    {
        image: './assets/porto/porto_web2.png',
        title: 'Taca Admin',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: 'https://github.com/Jong44/taxi_web',
        direct: 'https://taxi-web-psi.vercel.app/auth/login'
    },
    {
        image: './assets/porto/porto_web3.png',
        title: 'Company Profile',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: '#',
        direct: 'https://www.megagigasolusindo.co.id/'
    },
    {
        image: './assets/porto/porto_web4.png',
        title: 'Wibflix',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: 'https://github.com/Jong44/WibFlix',
        direct: 'https://wibflix.vercel.app/'
    },
    {
        image: './assets/porto/porto_web5.png',
        title: 'Community Website',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: '#',
        direct: 'https://talk-hub-seven.vercel.app/home'
    }
]

const dataPortofolioMobile = [
    {
        image: './assets/porto/porto_mobile1.png',
        title: 'One Call App',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: '#',
        direct: 'https://github.com/Jong44/on_call_app'
    },
    {
        image: './assets/porto/porto_mobile2.png',
        title: 'Taca App',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: '#',
        direct: 'https://github.com/Jong44/TAXI'
    },
    {
        image: './assets/porto/porto_mobile3.png',
        title: 'Food Cycle App',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam',
        github: '#',
        direct: 'https://github.com/Jong44/foodcycle'
    },

]

var tabMobile = document.getElementById('tab-mobile');
var tabWeb = document.getElementById('tab-website');
const cardPortofolio = document.getElementById('card-portofolio');

function renderPortofolio(){
    cardPortofolio.innerHTML = '';
    dataPortofolioWeb.forEach((item) => {
        cardPortofolio.innerHTML += `
            <div class="col-lg-4" data-aos="fade-up">
                <div class="card glass p-4 mb-5">
                    <img src="${item.image}" class="card-img-top" alt="...">
                    <h6 class="card-title fs-4 fw-bold mt-3">${item.title}</h6>
                    <p class="card-text fs-6">${item.description}</p>
                    <div class="d-flex justify-content-end">
                        <a href="${item.github}" class="card-link color-primary fs-5">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="${item.direct}" class="card-link color-primary fs-5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        `;
    });
}

function renderPortofolioMobile(){
    cardPortofolio.innerHTML = '';
    dataPortofolioMobile.forEach((item) => {
        cardPortofolio.innerHTML += `
            <div class="col-lg-4" data-aos="fade-up">
                <div class="card glass p-4 mb-5">
                    <img src="${item.image}" class="card-img-top" alt="${item.title}">
                    <h6 class="card-title fs-4 fw-bold mt-3">${item.title}</h6>
                    <p class="card-text fs-6">${item.description}</p>
                    <div class="d-flex justify-content-end">
                        <a href="${item.github}" class="card-link color-primary fs-5">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="${item.direct}" class="card-link color-primary fs-5">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        `;
    });
}

function handleClassTabMobile(){
    tabMobile.classList.remove('glass-primary');
    tabMobile.classList.add('glass-primary-active');
    tabWeb.classList.remove('glass-primary-active');
    tabWeb.classList.add('glass-primary');
    renderPortofolioMobile();
}

function handleClassTabWeb(){
    tabWeb.classList.remove('glass-primary');
    tabWeb.classList.add('glass-primary-active');
    tabMobile.classList.remove('glass-primary-active');
    tabMobile.classList.add('glass-primary');
    renderPortofolio();
}

function getTime(){
    const date = new Date();
    const hour = date.getHours();
    const minute = date.getMinutes();
    const second = date.getSeconds();
    const time = `${hour}:${minute}:${second}`;
    document.getElementById('time').innerText = time;
}



setInterval(getTime, 1000);
renderPortofolio();
