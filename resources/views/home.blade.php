@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="container-body">
        <div class="row justify-content-center">
            <div class="col-4 pt-2 ">
                <img src="/userImages/291766065_1354382998383895_5866895574866213624_n.jpg" class="rounded-circle ps-5 pe-5">
            </div>
            <div class="col-8 pt-3">
                <div class="d-flex flex-row">
                    <div class="pe-3">
                        <h2>{{ $user->username }}</h2>
                    </div>
                    <div class="pe-3">
{{--                        <a class="btn btn-sm btn-outline-dark fw-bold" href="/accounts/edit/" role="link" tabindex="0">Редагувати профіль</a>--}}
                        <button class="btn btn-outline-dark btn-sm"><div><strong>Стежити</strong></div></button>
                    </div>
                    <div class="pe-3">
{{--                        <div class="parameters"><svg aria-label="Параметри" class="" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12" cy="12" fill="none" r="8.635" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle><path d="M14.232 3.656a1.269 1.269 0 01-.796-.66L12.93 2h-1.86l-.505.996a1.269 1.269 0 01-.796.66m-.001 16.688a1.269 1.269 0 01.796.66l.505.996h1.862l.505-.996a1.269 1.269 0 01.796-.66M3.656 9.768a1.269 1.269 0 01-.66.796L2 11.07v1.862l.996.505a1.269 1.269 0 01.66.796m16.688-.001a1.269 1.269 0 01.66-.796L22 12.93v-1.86l-.996-.505a1.269 1.269 0 01-.66-.796M7.678 4.522a1.269 1.269 0 01-1.03.096l-1.06-.348L4.27 5.587l.348 1.062a1.269 1.269 0 01-.096 1.03m11.8 11.799a1.269 1.269 0 011.03-.096l1.06.348 1.318-1.317-.348-1.062a1.269 1.269 0 01.096-1.03m-14.956.001a1.269 1.269 0 01.096 1.03l-.348 1.06 1.317 1.318 1.062-.348a1.269 1.269 0 011.03.096m11.799-11.8a1.269 1.269 0 01-.096-1.03l.348-1.06-1.317-1.318-1.062.348a1.269 1.269 0 01-1.03-.096" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path></svg></div>--}}
                        <div class="_abm0"><svg aria-label="Параметри" class="_ab6-" color="#262626" fill="#262626" height="32" role="img" viewBox="0 0 24 24" width="32"><circle cx="12" cy="12" r="1.5"></circle><circle cx="6" cy="12" r="1.5"></circle><circle cx="18" cy="12" r="1.5"></circle></svg></div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-start pt-3">
                    <div class="margin-left-40"><span>63</span> дописів</div>
                    <div class="margin-left-40">Читачі: <span>207</span></div>
                    <div class="margin-left-40">Стежить: <span>603</span></div>
                </div>
                <div class="user-name pt-3"><span>Kasiakov Oleksiy</span></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="./userImages/120301994_329602551597787_1805050153629392299_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="userImages/67430494_1244659498991062_3099179561676303890_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="userImages/65954126_842259249478842_6702664647258512324_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="userImages/120301994_329602551597787_1805050153629392299_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="userImages/120301994_329602551597787_1805050153629392299_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="userImages/120301994_329602551597787_1805050153629392299_n.jpg" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection

<!--<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged ininin!') }}
        </div>
    </div>
</div>-->
