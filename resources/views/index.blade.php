<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 py-3">

                <form action="{{route('fibonacci-simpan')}}" method="POST">
                    @csrf
                    <div class="form-group"><label>Name : </label> <input type="text" name="name" /></div>
                    <div class="form-group"><label>Fibonacci (n) : </label> <input type="text" name="fibonacci" /></div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <table class="table py-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Fibonacci (n)</th>
                            <th scope="col">Fibonacci (Result)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- LOGIC START -->
                        @if(count($data) == 0)
                            <tr>
                                <td colspan="4" style="text-align: center;">No Data</td>
                            </tr>
                        @else
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->fibonacci_n}}</td>
                                    <td>{{$row->fibonacci_result}}</td>
                                </tr>
                            @endforeach
                        @endif
                        <!-- LOGIC END -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
