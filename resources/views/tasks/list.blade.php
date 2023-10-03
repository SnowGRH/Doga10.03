@foreach ($tasks as $User)
    <form action="api/tasks/{{$task->id}}" method="post">
        {{csrf_field()}}
         {{method_field('Get')}}
         <div class="form-group">
                <input type="submit" value="{{$task->title}}">
         </div>   
</form>
@endforeach