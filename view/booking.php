<style>
    .mgr{
        margin-right: 2%;
    }
    .rowtt{
        float: left;
        width: 100%;
    }
    .mgb{
        margin-bottom: 20px;
    }
    main{
        width: 100%;
        display: flex;
        justify-content: center;
        font-family: roboto;
    }
    .boxleft{
        width: 69%;
        min-height: 200px;
    }
    .boxright{
        width: 39%;
        height: 500px;
        justify-content: space-between;
    }

    .money1{
        position: absolute;
        right: 50px;
        top: 190px;
    }
    .money2{
        position: absolute;
        right: 50px;
        top: 300px;
    }
    .money3{
        position: absolute;
        right: 50px;
        top: 370px;
    }
    .money4{
        position: absolute;
        right: 50px;
        top: 430px;
        
    }
    .money5{
        position: absolute;
        right: 50px;
        top: 490px;
        font-size: 23px;
    }
    .fullmoney{
        width: 100%;
        background-color: red;
        border: 1px solid #EEE ;
    }
    .fullmoney1{
        width: 100%;
        border: 1px solid #EEE ;
    }
    .fullmoney p{
        color:white;
    }
    .endmain{
        display: flex;
        justify-content: end;
    }
    .endmain input{
        width: 150px;
        margin-right: 50px;
        margin-left: 250px;
        border-radius: 5px;
        background: linear-gradient(26.73deg, #F9A51A 13.7%, #FBB612 29.8%, #FFDD00 66.81%);
    }
</style>
<main>
    <div class="boxleft mgr">

    </div>
    <div class="boxright">
        <div class="rowtt mgb">
            <label><h3>THÔNG TIN ĐẶT CHỖ</h3></label>
        </div>
        <div class="rowtt mgb">
            <a href="">Thông Tin Khách Hàng</a>
        </div>
        <div class="rowtt mgb fullmoney1">
            <p>Chuyến đi</p>
            <p class="money1">1.642.800 VNĐ</p>
        </div>
        <div class="rowtt mgb">
            <p>Từ Hà Nội đến Tp. Hồ Chí Minh</p>
        </div>
        <div class="rowtt mgb fullmoney1">
            <p>Giá vé</p>
            <p class="money2">1.642.800 VNĐ</p>
        </div>
        <div class="rowtt mgb fullmoney1">
            <p>Thuế, phí</p>
            <p class="money3">584.400 VNĐ</p>
        </div>
        <div class="rowtt mgb fullmoney1">
            <p>Dịch vụ</p>
            <p class="money4">0 VNĐ</p>
        </div>
        <div class="rowtt mgb fullmoney">
            <p>Tổng tiền</p>
            <p class="money5">1.642.800 VNĐ</p>
        </div>
        <div class="rowtt"></div>
    </div>
   
</main>
<div class="endmain">
        <h3>Tổng tiền 0 VNĐ</h3>
        <input type="submit" value="Đi tiếp">
    </div>
