@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">Accès réservé Kenko-Ho</h2>
        @if (session('error'))
            <p class="text-danger text-center">{{ session('error') }}</p>
        @endif
        <div class="d-flex justify-content-center">
            <input type="password" id="accessCode" class="form-control w-50" placeholder="Entrez le code">
            <button class="btn btn-primary ms-2" onclick="checkAccess()">Valider</button>
        </div>
    </div>

    <script>
        function checkAccess() {
            let code = document.getElementById('accessCode').value;

            fetch("{{ route('check-access') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: "code=" + encodeURIComponent(code)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        window.location.href = "{{ route('kenko-ho') }}";
                    } else {
                        alert('Code incorrect');
                    }
                });
        }
    </script>
@endsection
