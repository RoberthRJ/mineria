<div class="main-card col-sm-6 col-md-3 float-right">
    <img src="assets/images/card/cards.jpg" class="card-img-top" alt="...">
    <div class="pt-2">
        <div class="title-card">
            <span>{{$service->location->department}}</span> 
            <p class="float-right">{{$service->company->title}}</p>
        </div>
        <div class="text-card pt-2">
            <h6>{{str_limit($service->title, 100)}}</h6>
            <div class="price">
                <p><span>S/100</span> / hora</p>
                <p class="float-right"><i class="fa fa-star text-primary"></i> 5(15)</p>
            </div>
        </div>
    </div>
</div>