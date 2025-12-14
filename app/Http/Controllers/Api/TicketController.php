<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Ticket;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller
{
    public function getTicket(Request $request, $msisdn)
    {
        try {
            $ticket = Ticket::where('sold_status', 0)->inRandomOrder()->first();

            $payment = new Payment;
            $payment->ticket_series_id = $ticket ? $ticket->ticket_series_id : null;
            $payment->ticket_no = $ticket ? $ticket->ticket_no : null;
            $payment->msisdn = $msisdn;
            $payment->amount = 20;
            $payment->pay_status = 0;
            $payment->date = now();
            $payment->response_data = $request->all() ? json_encode($request->all()) : null;
            $payment->save();


            // update ticket sold status if ticket is found
            if ($ticket) {
                $ticket->sold_status = 1;
                $ticket->sold_date = now();
                $ticket->save();
            }

            return response()->json([
                'status' => 'success',
                'ticket_no' => $ticket ? $ticket->ticket_no : null,
                'message' => $ticket ? 'Successfully purchased ticket.' : 'No tickets available.',
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
        }
    }
}
