@extends('layouts.app')

@section('content')
    <x-content 
        label="Dashboard"
        title="Hello, <user>."
        subtitle="An overview of registered companies and employees.">
    <x-slot:actions>
        <a href="#" class="button button-secondary">View Companies</a>
        <a href="#" class="button button-secondary">View Employees</a>
    </x-slot:actions>
        <div class="panel">
            <div class="employee-table">
                <div class="table-head">
                    <div><h2>Recently added companies</h2><p>Latest organisations in the directory</p></div>
                    <a class="button button-small button-secondary" href="#">View all</a>
                </div>
                <div class="table-wrap">
                    <table class="table-employee">
                        <thead><tr><th>Company</th><th>Email</th><th>Website</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr><td><div class="person-cell"><div class="avatar">NS</div><div><div class="primary-text">Northwind Studio</div><div class="secondary-text">Added today</div></div></div></td><td>hello@northwind.co</td><td>northwind.co</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                            <tr><td><div class="person-cell"><div class="avatar">NS</div><div><div class="primary-text">Northwind Studio</div><div class="secondary-text">Added today</div></div></div></td><td>hello@northwind.co</td><td>northwind.co</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                            <tr><td><div class="person-cell"><div class="avatar">NS</div><div><div class="primary-text">Northwind Studio</div><div class="secondary-text">Added today</div></div></div></td><td>hello@northwind.co</td><td>northwind.co</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="employee-table">
                <div class="table-head">
                    <div><h2>Recent employees</h2><p>Newest people added to the directory</p></div>
                    <a class="button button-small button-secondary" href="#">View all</a>
                </div>
                <div class="table-wrap">
                    <table class="table-employee">
                        <thead><tr><th>Employee</th><th>Company</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead>
                        <tbody>
                            <tr><td><div class="person-cell"><div class="avatar">MS</div><div><div class="primary-text">Maya Singh</div><div class="secondary-text">Product Designer</div></div></div></td><td><span class="badge-soft">Northwind Studio</span></td><td>maya@northwind.co</td><td>01603 555 014</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                            <tr><td><div class="person-cell"><div class="avatar">MS</div><div><div class="primary-text">Maya Singh</div><div class="secondary-text">Product Designer</div></div></div></td><td><span class="badge-soft">Northwind Studio</span></td><td>maya@northwind.co</td><td>01603 555 014</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                            <tr><td><div class="person-cell"><div class="avatar">MS</div><div><div class="primary-text">Maya Singh</div><div class="secondary-text">Product Designer</div></div></div></td><td><span class="badge-soft">Northwind Studio</span></td><td>maya@northwind.co</td><td>01603 555 014</td><td class="action-cell"><a class="button action-button" href="#">View</a></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-content>
@endsection
