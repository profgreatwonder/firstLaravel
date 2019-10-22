<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;



use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //  public function list(). This is replaced with the function below
     public function index() {
        // $customers = [
        //                 'John Doe',
        //                 'Jane Doe',
        //                 'Bob the Builder',
        //                 'Another Name',
        //             ];
        // the code above will be replaced with the one below, as we are now fetching from DB.

            $customers = Customer::all();

        // where('active', 1)->get();

        // where('active', 0)->get();

        // dd($inactiveCustomers);
        // dd($customers);
        // the codes above is to help display the db on the browser

                    // return view('internals.customers', [
                    //     // 'customers' => $customers,

                    //     'activeCustomers' => $activeCustomers,
                    //     'inactiveCustomers' => $inactiveCustomers,
                    // ]);

                    // the code above can be re-written with the shorthand below

                    return view('customers.index', compact('customers'));
     }

     public function create() {

        $companies = Company::all();

    return view('customers.create',
    compact('companies'));



        // incase we want to paginate, we use the code below instead.
        // $companies= Company::paginate(2);

        // return view('customers.create', compact('companies'));

     }

     public function store() {

        // to validate an entry in a form below

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);

        // instead of having the repititon of what's above below, we can use a code to erase the repition. $customer = Customer::create($data); and after that, we can get rid of the code below

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();



        Customer::create($data);

        return redirect('customers');

        //  dd(request('name'));

     }

     public function show(Customer $customer) {

            // $customer = Customer::find($customer); to fix the error coming from entering 30 check below
            // $customer = Customer::where('id', $customer)->firstOrFail();

            return view('customers.show', compact('customer'));
     }

     public function edit(Customer $customer) {

        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
     }

     public function update(Customer $customer) {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            // 'active' => 'required',
            // 'company_id' => 'required'
        ]);

        $customer->update($data);

        return redirect('customers/' . $customer->id);
     }
}
