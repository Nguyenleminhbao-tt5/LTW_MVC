// click sự kiện hủy sản phẩm
if(document.querySelector('.product-delete'))
{
    let list=document.querySelectorAll('.product-delete');
    let listID=document.querySelectorAll('.ProductID');
    list.forEach((item,index)=>
        {
            item.addEventListener('click',()=>
            {
                document.querySelector('.modal-error').setAttribute('style','display:flex');
               
                let ID=listID[index].innerHTML;
                window.history.pushState('new','title',`./index.php?url=AdminProduct&id=${ID}`);
            })
           
        })
    
}
// click thu hồi hủy sản phẩm
if(document.querySelector('.cancel-delete-product'))
{
    document.querySelector('.cancel-delete-product').addEventListener('click',()=>
    {
       
        document.querySelector('.modal-error').setAttribute('style','display:none');
    })
}

// click sự kiện chỉnh sửa sản phẩm
if(document.querySelector('.product-edit'))
{
    
    let list=document.querySelectorAll('.product-edit');
    let listID=document.querySelectorAll('.ProductID');
    list.forEach((item,index)=>
        {
            item.addEventListener('click',()=>
            {
                document.querySelector('.modal-modified').setAttribute('style','display:flex');
               
                let ID=listID[index].innerHTML;
                window.history.pushState('new','title',`./index.php?url=AdminProduct&ProductID=${ID}`);
            })
           
        })
}
// click thu hồi chỉnh sửa sản phẩm
if(document.querySelector('.cancel-back-product'))
{
    document.querySelector('.cancel-back-product').addEventListener('click',()=>
    {
        console.log(1);
        document.querySelector('.modal-modified').setAttribute('style','display:none');
    })
}

// click sự kiện xóa khách hàng
if(document.querySelector('.user-delete'))
{
    let list=document.querySelectorAll('.user-delete');
    list.forEach(item=>
        {
            item.addEventListener('click',()=>
            {
                document.querySelector('.modal-error').setAttribute('style','display:flex');
            })
        })
}
// click thu hồi xóa khách hàng
if(document.querySelector('.cancel-delete-product'))
{
    document.querySelector('.cancel-delete-product').addEventListener('click',()=>
    {
        document.querySelector('.modal-error').setAttribute('style','display:none');
    })
}

// click sự kiện xóa đơn hàng
if(document.querySelector('.order-delete'))
{
    let list=document.querySelectorAll('.order-delete');
    list.forEach(item=>
        {
            item.addEventListener('click',()=>
            {
                document.querySelector('.modal-error').setAttribute('style','display:flex');
            })
        })
}
// click thu hồi xóa đơn hàng
if(document.querySelector('.cancel-delete-product'))
{
    document.querySelector('.cancel-delete-product').addEventListener('click',()=>
    {
        document.querySelector('.modal-error').setAttribute('style','display:none');
    })
}

// click sự kiện chỉnh sửa sản phẩm
if(document.querySelector('.order-edit'))
{
    document.querySelector('.order-edit').addEventListener('click',()=>
    {
        document.querySelector('.modal-modified').setAttribute('style','display:flex');
    })
}
// click thu hồi chỉnh sửa sản phẩm
if(document.querySelector('.cancel-back-product'))
{
    document.querySelector('.cancel-back-product').addEventListener('click',()=>
    {
        console.log(1);
        document.querySelector('.modal-modified').setAttribute('style','display:none');

    })
}

