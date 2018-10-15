<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
<div class="bcontainer">

  <header>
        @include('includes.header')
    </header>

    <main role="main">
            @yield('content')
    </main>
        <footer>
                @include('includes.footer')
        </footer>



</div>

<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
-->

</body>

</html>