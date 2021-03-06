<div class="box box-primary">

    <div class="box-header">
        <div class="event-banner">
            {{--<img class="img-responsive" src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/photo1.png"/>--}}
        </div>
    </div>

    <div class="box-header with-border">
        <h3>{{ $d->event->name }}</h3>
        <p><i>Organizat de {{ $d->event->subsidiary->name }}</i></p>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <strong><i class="fa fa-calendar" aria-hidden="true"></i></strong>
                {{ $d->event->start_date->format('d-m-Y') }}
                &nbsp;
                @if($d->event->end_date)
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    &nbsp;
                    {{ $d->event->end_date->format('d-m-Y') }}
                @endif
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                <strong>
                    <i class="fa fa-map-marker margin-r-5"></i></strong>
                {{ $d->event->address }}
                {{ $d->event->location }}
            </div>
        </div>
        <hr/>


        <div class="btn-group">
            <a href="" type="button" class="btn btn-success">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Inscriere
            </a>
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Actiune</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                @if($d->event->form)
                    <li>
                        <a href="#" class="edit-registration-form" data-id="{{ $d->event->form->id }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Formular
                        </a>
                    </li>
                @else
                    <li>
                        <a href="#" class="edit-registration-form">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Formular
                        </a>
                    </li>
                @endif
                <li><a href="#">Setari Inscriere</a></li>
            </ul>
        </div>

        {{--<div class="text-right">--}}
        {{--<a href="#" class="">--}}
        {{--<button class="btn btn-warning edit-event" data-id="{{ $d->event->id }}">--}}
        {{--<i class="fa fa-pencil" aria-hidden="true"></i>--}}
        {{--Editeaza Eveniment--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--@if($d->event->form)--}}
        {{--<a href="#" class="">--}}
        {{--<button class="btn btn-primary edit-registration-form" data-id="{{ $d->event->form->id }}">--}}
        {{--<i class="fa fa-pencil" aria-hidden="true"></i>--}}
        {{--Editeaza Formular Inscriere--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--@endif--}}
        {{--<a href="#" class="">--}}
        {{--<button class="btn btn-success attend">--}}
        {{--<i class="fa fa-sign-in" aria-hidden="true"></i>--}}
        {{--Inscriere--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--</div>--}}

        <hr/>
        <strong><i class="fa fa-info-circle" aria-hidden="true"></i></strong>
        <p>{{ $d->event->description }}</p>
    </div>
</div>




