function changeTitleOrderTotalToPostPayment (){
    let tdInOrderTotal = document.querySelector('.order-total > td');
    tdInOrderTotal.setAttribute('data-title', 'Thanh toán trước 30% giá của sản phẩm')
}
if(window.location.pathname ==='/cart'){
    changeTitleOrderTotalToPostPayment()
}
