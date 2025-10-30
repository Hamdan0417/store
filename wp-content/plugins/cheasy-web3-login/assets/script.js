jQuery(function($){
    $('#mm-login a').on('click', async function(e){
        e.preventDefault();

        if (typeof window.ethereum === 'undefined') {
            alert('Please install MetaMask!');
            return;
        }

        try {
            const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
            const address = accounts[0];

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'metamasklogin',
                    address: address
                },
                success: function(response) {
                    if (response === 'ok') {
                        window.location.reload();
                    } else {
                        alert('Login failed!');
                    }
                }
            });
        } catch (error) {
            console.error(error);
            alert('An error occurred.');
        }
    });
});
