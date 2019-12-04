<div class="main-card col-sm-6 col-md-3 float-left" route="{{route('service.show',$service->slug)}}">
    <img src="{{$service->pathAttachment()}}" class="card-img-top" alt="..." style="border-radius: 8px;">
    <div class="pt-2">
        <div class="title-card">
            <span>{{$service->location->department}}</span> 
            <p class="float-right" style="padding: 0px; margin: 0px">{{$service->company->title}}</p>
        </div>
        <div class="text-card pt-2">
            <h6>{{ str_limit($service->title, 50)}}</h6>
            <div class="price">
                <p>
                    <span>S/100</span> / hora
                    <span class="float-right"><i class="fa fa-star text-primary"></i> 5(15)</span>
                </p>
            </div>
        </div>
    </div>
</div>