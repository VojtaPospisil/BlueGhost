@extends('welcome')

@section('content')
    <div class="form">
        <div class="tab-content">
            <div id="signup">
                @if($user->exists)
                    <h1>Upravit uživatele</h1>
                    <form method="POST" action="{{ route('update', $user) }}">
                @else
                    <h1>Nový uživatel</h1>
                    <form method="POST" action="{{ route('store') }}">
                @endif
                    @csrf
                    <div class="field-wrap">
                        <label>Celé jméno<span class="req">*</span></label>
                        <input type="text" autocomplete="off" name="fullName" id="fullName"
                               data-userid="{{ $user->id }}"
                               value="{{ old('fullName', $user->fullName) }}"
                               class="@error('fullName') border-red-500 @enderror">
                        @error('fullName')
                            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-wrap">
                    <label>Email<span class="req">*</span></label>
                    <input type="text" autocomplete="off" name="email"
                              value="{{ old('email', $user->email) }}"
                              class="@error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-wrap">
                        <label>Telefon<span class="req">*</span></label>
                        <input type="text" autocomplete="off" name="phone"
                               value="{{ old('phone', $user->phone) }}"
                               class="@error('phone') border-red-500 @enderror">
                        @error('phone')
                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-wrap">
                        <label>Poznámka</label>
                        <textarea type="textarea" autocomplete="off" name="note"
                                  value="{{ old('note', $user->note) }}"
                                  class="@error('note') border-red-500 @enderror"
                        >{{ old('note', $user->note) }}</textarea>
                        @error('note')
                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-wrap">
                        <label>Slug<span class="req">*</span></label>
                        <input type="text" autocomplete="off" name="slug" id="slug"
                               value="{{ old('slug', $user->slug) }}"
                               class="@error('slug') border-red-500 @enderror">
                        @error('slug')
                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="button button-block">Uložit</button>
                </form>
            </div>
            <div>
            </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
@endsection
