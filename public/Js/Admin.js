// // status order admin

if (document.querySelectorAll('.status-order'))
{
    let listStatus=document.querySelectorAll('.status-order');

    listStatus.forEach(item=>
        {
            item.addEventListener('dblclick',()=>
            {
                item.innerHTML='Đã xác nhận';
                item.classList.remove('bg-info');
                item.classList.add('bg-success');
            })
        })
  
}