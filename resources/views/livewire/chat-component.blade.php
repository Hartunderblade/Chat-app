<div>
<div style="overscroll-behavior: none;">
      <div
        class="fixed w-full bg-indigo-400 h-16 pt-2 text-white flex justify-between shadow-md"
        style="top:0px; overscroll-behavior: none;"
      >
        <!-- back button -->
        <a href="/dashboard">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            class="w-12 h-12 my-1 text-indigo-100 ml-2"
          >
            <path
              class="text-white-100 fill-current"
              d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z"
            />
          </svg>
        </a>
        <div style="font-size: 28px;" class="my-3 text-white-100 font-bold text-lg tracking-wide">{{ $user->name }}</div>
        <!-- 3 dots -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          class="icon-dots-vertical w-8 h-8 mt-2 mr-2"
        >
          <path
            class="text-white-400 fill-current"
            fill-rule="evenodd"
            d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
          />
        </svg>
      </div>

      <div class="mt-20 mb-16">
        @foreach($messages as $message)


        @if($message['sender'] != auth()->user()->name)
        <div class="clearfix w-4/4">
          <div style="color: white;"
            ><span style="color: gray; margin-left: 20px; ">{{ $message['sender'] }} :</span><p style="font-size: 18px;" class="px-6 text-white-500 bg-indigo-400 mx-4 my-2 p-2 rounded-lg inline-block">{{ $message['message'] }}</p></div>
        </div>

        @else

        <div class="clearfix">
          <div class="text-right">
              <p style="color: white; font-size: 18px;"
              class="bg-indigo-500 mx-1 my-2 p-2 px-6 rounded-lg inline-block">{{ $message['message'] }} </p>
              <span style="color: gray; margin-right: 20px;">: Ты</span>
          </div>
        </div>

        @endif
        @endforeach

      </div>
    </div>

    <form wire:submit="sendMessage()">
    <div class="fixed w-full flex justify-between bg-indigo-50" style="bottom: 0px;">
      <textarea
        class="flex-grow m-2 py-2 px-4 mr-1 rounded-full border border-gray-300 bg-white-200 resize-none"
        rows="1"
        wire:model="message"
        placeholder="Сообщение..."
        style="outline: none;"
      ></textarea>
      <button class="m-2" type="submit" style="outline: none;">
        <svg
          class="svg-inline--fa text-indigo-400 fa-paper-plane fa-w-16 w-12 h-12 py-2 mr-2"
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="paper-plane"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"
          />
        </svg>
      </button>
    </div>
    </form>
</div>
