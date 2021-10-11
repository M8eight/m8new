<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $note->header }}</h5>
            <p class="card-text text-center">{{ $note->text }}</p>
            <form enctype="multipart/form-data" method="POST" action="{{ route('apps-note-delete', $note->id) }}">
                @csrf
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"></path>
                        </svg>
                        Удалить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
