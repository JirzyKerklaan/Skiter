<x-app-layout>

    <div class="grid grid-cols-2 gap-2 min-h-screen">

        <div class="block w-full bg-gray-500"></div>

        <div>


            <div class="">
                <form class="block w-full mt-12 bg-white p-3 rounded-xl shadow-md"
                      action="{{route("message.update",$message->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="">
                        <div class="">
                            <div class="">
                                <strong>Name:</strong>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" name="titel" value="{{ $message->titel }}" class="form-control"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <strong>text:</strong>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    class="form-control" style="height:150px" name="text"
                                    placeholder="Detail">{{ $message->text }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>

                        </div>
                    </div>

                </form>
                <div class="w-full">
                    <form method="post" class=""
                          action="{{route("messages.delete",$message->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary">delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
