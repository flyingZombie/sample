<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content" rows="3" placeholder="have a chat...">{{ old('content')}}</textarea>
    <button type="submit" class="btn btn-primary pull-right">Release</button>
</form>
