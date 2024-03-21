<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    * {
        border: 0px;
        margin: 0px;
        padding: 0px;
        outline: 0px;
        box-shadow: none;
        box-sizing: border-box;
    }

    svg {
        width: 40px;
    }

    a {
        text-decoration: none;
      
    }

    nav.flex.items-center.justify-between>.flex.justify-between.flex-1.sm\:hidden {
        display: none;
    }

    nav.flex.items-center.justify-between>.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
        text-align: center;
    }

    nav.flex.items-center.justify-between a {

        padding: 10px !important;
        color: black;
    }

    span[aria-current="page"] span {
        color: grey !important;
    }
</style>
</head>

<body>
    <div class="container content">
        @include('msg')
        @if($messages->count() > 0 )
        <table class="table table-hover table-bordered text-center border-dark  mt-5">

            @php
            $i = 0;
            @endphp

            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $x)
                <tr>
                    <th>
                        {{ ++$i }}
                        <!-- -- {{$x->id}} -->
                    </th>
                    <td>{{ $x->name }}</td>
                    <td>{{ $x->email }}</td>
                    <td>
                        <a href="{{ route('main.show',$x->id) }}" class="btn py-0 btn-success">
                            Show
                        </a>
                        <form class="d-inline" method="post" action="{{ route('main.destroy', $x->id) }}">
                            @csrf
                            @method('delete')
                            <button type="supmit" class="btn py-0 btn-danger">
                                Delete
                            </button>
                        </form>

                
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $messages->links() }}

    
@else
<div class="alert alert-danger my-5 fw-bold text-center" role="alert">
    There is no messages
 </div>
@endif


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
        document.addEventListener('submit', function(event) {
            var form = event.target;
            var submitButton = form.querySelector('[type="submit"]');

            if (submitButton) {
                submitButton.setAttribute('disabled', 'disabled');
            }
        });
    </script>
    </div>


</body>

</html>