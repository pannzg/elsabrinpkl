<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" id="name" value="{{ old('name', $user->name ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
    @isset($user)
        <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
    @endisset
</div>
