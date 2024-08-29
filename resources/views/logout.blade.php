<x-auth-layout>
    <div class="bg-image" style="height:100vh;">
        <div class="row g-0 justify-content-center bg-primary-dark-op" style="height:100vh;"></div>
    </div>
    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
    <script>
        document.getElementById('logout-form').submit();
    </script>
</x-auth-layout>
