<div class="flex justify-center">
    <div class="w-6/12">
        <h1 class="my-10 text-3xl">Comments</h1>
        <form class="my-4 flex" wire:submit.prevent="addComment">
            <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind." wire:model.lazy="newComment">
            <div class="py-2">
                <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
            </div>
        </form>
        @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-start my-2">
                <p class="font-bold text-lg">{{$comment->creator->name}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <p class="text-gray-800">{{$comment->body}}</p>
        </div>
        @endforeach
    </div>
</div>