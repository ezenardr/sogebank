@foreach ($transactions as $transaction)
    <div
        style="--tw-text-opacity: 1;
        background-color: white;
        border: 1px;
        border-radius: 0.5rem;
        padding: 0rem 1.5rem;
        max-width: 28rem;
        margin: 0 auto;
        --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);">
        <h1
            style="font-weight: 700;
        text-align: center;">
            Sogebank Online</h1>
        <div
            style="display: flex;
        justify-content:center;
        margin-bottom: 0;">
            <h2 style="font-weight: 700;
        font-size: 1.5rem;
        line-height: 2rem;">Invoice</h2>
            <div
                class="--tw-text-opacity: 1;color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;">
                <div>{{ $transaction->transac_date }}</div>
                <div>ID :{{ $transaction->transac_id }}</div>
            </div>
        </div>
        <div style="margin-bottom: 3rem;">
            <h3
                class="font-weight: 700;">
                Transaction De:</h3>
            <div style="color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;">
                {{ $user->last_name }} {{ $user->first_name }}</div>
            <div style="color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;">
                {{ $user->address }}</div>
            <div style="color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;">
                {{ $user->email }}</div>
        </div>
        <table style="width: 100%;
        margin-bottom: 4rem;">
            <thead>
                <tr>
                    <th
                        style="font-weight: 700;
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;text-align:left;">
                        <h3>Description</h3></th>
                    <th
                        style="font-weight: 700;
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;text-align:right;">
                        <h3>Amount</h3></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td
                        style="font-weight: 700;
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;text-align:left;font-size:1rem;">
                        {{ $transaction->transac_description }}</td>
                    <td
                        style="font-weight: 700;
                    --tw-text-opacity: 1;
                    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
                        /* #374151 */
                    ;text-align:right;">
                        {{$transaction->transac_currency}} {{ $transaction->transac_amount }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td
                        style="font-weight: 700;
                    --tw-text-opacity: 1;
                    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
                        /* #374151 */
                    ;text-align:left;">
                        Total</td>
                    <td
                        style="font-weight: 700;
                    --tw-text-opacity: 1;
                    color: rgb(55 65 81 / var(--tw-text-opacity, 1))
                        /* #374151 */
                    ;text-align:right;">
                        {{$transaction->transac_currency}} {{ $transaction->transac_amount }}</td>
                </tr>
            </tfoot>
        </table>
        <div
            style="font-weight: 700;
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            /* #374151 */
        ;
        margin-bottom: 0.5rem;">
            Thank you for using Sogebank Online!</div>
    </div>
@endforeach
