document.addEventListener('DOMContentLoaded', function() {
    const burnedTokensElement = document.getElementById('burned-tokens');

    if (burnedTokensElement) {
        const provider = new ethers.providers.JsonRpcProvider('https://bsc-dataseed.binance.org/');
        const burnAddress = '0x000000000000000000000000000000000000dEaD';
        // TODO: Replace with mainnet token address
        const tokenAddress = '0x5cff3a8f0055d1c06a448598595f82d06a838e07';

        const tokenContract = new ethers.Contract(tokenAddress, ['function balanceOf(address) view returns (uint256)'], provider);

        tokenContract.balanceOf(burnAddress).then(balance => {
            burnedTokensElement.innerText = ethers.utils.formatUnits(balance, 18); // Assuming 18 decimals
        });
    }
});
