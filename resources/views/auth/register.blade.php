<x-layout>
    <form method="post" action="/register">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label" for="name">Name</label>
            <input type="text" class="input" name="name" placeholder="Your Name" required/>

            <label class="label" for="email">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required/>

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Password" required/>

            <button class="btn btn-neutral mt-4" data-test="register-button">Register</button>
        </fieldset>
    </form>
</x-layout>
