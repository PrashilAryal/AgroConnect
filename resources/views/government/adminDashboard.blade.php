@extends('government.adminPanel')

@section('adminContent')

<style>
.data-summary-section {
    width: 100%;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* margin-top: 30px !important; */
    padding: 10px 10px;
    /* margin-bottom: 30px; */


}

.box {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 20px 50px;
}

.for-icon {
    font-size: 14px;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.restaurant-count {
    background-color: #FFE2E6;
    border-radius: 10px;
}

.restaurant-icon {
    background-color: #FA597E;
    padding: 5px;
}

.count {
    margin-bottom: 0 !important;
    line-height: 1 !important;
    font-size: 25px;
    color: black;
    font-weight: 500;
}

.text-name {
    margin-bottom: 0 !important;
    line-height: 1 !important;
    font-size: 20px;
    font-weight: 400;
    margin-top: 0.5rem;
}

.customer-count {
    background-color: #FFF4DE;
    border-radius: 10px;
}

.customer-icon {
    background-color: #FE947A;
    padding: 5px;

}

.delivery-count {
    background-color: #DCFCE7;
    border-radius: 10px;
}

.delivery-icon {
    background-color: #3CD755;
    padding: 5px;

}

.location-count {
    background-color: #F4E8FF;
    border-radius: 10px;
}

.location-icon {
    background-color: #BF83FF;
    padding: 5px;

}

.overallInformation {
    font-size: 1.8rem;
    padding-left: 0 0 2rem 2rem;
    margin-top: 2rem;
    letter-spacing: 0.7px;
    width: 20rem;
    border-bottom: 1px solid gray;
}
</style>

<div class="data-summary-section">
    <div class="box restaurant-count">
        <div class="for-icon restaurant-icon">
            <ion-icon name="home"></ion-icon>
        </div>
        <div class="for-text">
            <p class="count">1</p>
            <p class="text-name">Restaurant</p>
        </div>
    </div>
    <div class="box customer-count">
        <div class="for-icon customer-icon">
            <ion-icon name="people"></ion-icon>
        </div>
        <div class="for-text">
            <p class="count">2</p>
            <p class="text-name">Customer</p>
        </div>
    </div>
    <div class="box delivery-count">
        <div class="for-icon delivery-icon">
            <ion-icon name="bicycle"></ion-icon>
        </div>
        <div class="for-text">
            <p class="count">0</p>
            <p class="text-name">Delivery person</p>
        </div>
    </div>
    <div class="box location-count">
        <div class="for-icon location-icon">
            <ion-icon name="location"></ion-icon>
        </div>
        <div class="for-text">
            <p class="count">3</p>
            <p class="text-name">Location</p>
        </div>
    </div>
</div>





@endsection