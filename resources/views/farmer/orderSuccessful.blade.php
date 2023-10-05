<style>
    .successful-order-box{
    margin: 20rem auto;
    border: 1px solid rgb(230, 230, 230);
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 50rem;
    padding: 2rem;
}
.successful-order-box-img{
    width: 30rem;
    height: 20rem;
}
.successful-order-box-img img{
    width: 100%;
    height: 100%;
}
.successful-order-box h2{
    font-size: 2.4rem;
    letter-spacing: 1px;
    margin-bottom: 10px;
}
.successful-order-box p{
    font-size: 1.6rem;
    letter-spacing: 1px;
    margin-bottom: 10px;
}
.delivery-status-btn{
    background-color: #1c9e2d;
    font-size: 1.4rem;
    letter-spacing: 1px;
    border-radius: 5px;
    border: none;
    color: #fff;
    padding: 10px 20px;
    margin-top: 2rem;
    cursor:pointer;
}
.delivery-status-btn:hover{
    background-color: #40CD52;
}
</style>

<div class="successful-order-box">
        <div class="successful-order-box-img">
            <img src="/images/happy-meal.png" alt="">  
        </div>
          <h2>Order Placed!</h2>
          <p>Your order was placed successfully.</p>
          <p>For more details check Delivery status under profile tab.</p>
        <a href="/"><button class="delivery-status-btn">Go Home</button></a>  
</div>