// click sự kiện hủy sản phẩm
if(document.querySelector('.product-delete'))
{
    document.querySelector('.product-delete').addEventListener('click',()=>
    {
        document.querySelector('.modal-error').setAttribute('style','display:flex');
    })
}
// click thu hồi hủy sản phẩm
if(document.querySelector('.cancel-delete-product'))
{
    document.querySelector('.cancel-delete-product').addEventListener('click',()=>
    {
        console.log(1);
        document.querySelector('.modal-error').setAttribute('style','display:none');
    })
}

// click sự kiện chỉnh sửa sản phẩm
if(document.querySelector('.product-edit'))
{
    document.querySelector('.product-edit').addEventListener('click',()=>
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

// click sự kiện xóa khách hàng
if(document.querySelector('.user-delete'))
{
    document.querySelector('.user-delete').addEventListener('click',()=>
    {
        document.querySelector('.modal-error').setAttribute('style','display:flex');
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
    document.querySelector('.order-delete').addEventListener('click',()=>
    {
        document.querySelector('.modal-error').setAttribute('style','display:flex');
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

