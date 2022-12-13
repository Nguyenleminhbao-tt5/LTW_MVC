 // home page

 if(document.querySelectorAll('.commercial-img'))
{   
    let listCommercial = document.querySelectorAll('.commercial-img');
    let index1 = 0;
    if(listCommercial)
    {
        setInterval(() => {
            document.querySelector('.commercial-img.img--active').classList.remove('img--active');
            listCommercial[index1].classList.add('img--active');

            if (index1 == 3) index1 = 0;
            else index1++;

        }, 3000);
    }
}


 // category product
if(document.querySelectorAll('.category__item'))
{
    let listCategory = document.querySelectorAll('.category__item');

    listCategory.forEach((item, index) => {
        item.addEventListener('click', () => {
            document.querySelector('.category__item.category__item--active').classList.remove('category__item--active');
            item.classList.add('category__item--active');
        })
    })
}

 // profile product

 if(document.querySelectorAll('.img'))
 {
    let listImg = document.querySelectorAll('.img');
    let index = 0;
    document.querySelector('.left-btn').addEventListener('click', () => {
        if (index == 0) index = 2;
        else index--;

        document.querySelector('.img.img--active').classList.remove('img--active');
        listImg[index].classList.add('img--active');
    });
    document.querySelector('.right-btn').addEventListener('click', () => {
        if (index == 2) index = 0;
        else index++;

        document.querySelector('.img.img--active').classList.remove('img--active');
        listImg[index].classList.add('img--active');
    })
}




