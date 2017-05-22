@extends( 'layouts.guest.master' )

@section( 'header_styles' )
    <style>

        .full-height {
            height: calc( 100vh - 70px );
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section( 'content' )
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name' ) }}
            </div>
        </div>
    </div>
@endsection
