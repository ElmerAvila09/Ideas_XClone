<h4> Share yours ideas </h4>
<div class="row">

    <form action="{{ route('idea.create') }}" method="post">
        
        @csrf
        {{-- Body --}}
        <div class="mb-3">
            <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
        </div>

        {{-- Submit Button --}}
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
