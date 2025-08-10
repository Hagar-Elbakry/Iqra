<x-app>
    <x-nav/>
    <div style="padding: 50px">
    <table class="table">
        <thead>
        <tr>
            <th scope="col" style="padding-left: 10px;">Book</th>
            <th scope="col">Borrow Date</th>
            <th scope="col">Return Date</th>
            <th scope="col">Is Returned</th>
            <th scope="col" style="padding-left: 30px">Return</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding-left: 10px;">divergent</td>
            <td>{{now()}}</td>
            <td>{{now()}}}</td>
            <td>no</td>
            <td><x-primary-button class="ms-4" style="height: 40px;">
                {{ __('Return') }}
                </x-primary-button></td>
        </tr>
        </tbody>
    </table>
    </div>
</x-app>
