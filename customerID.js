// Check if a customer ID is already stored
var customerID = localStorage.getItem('customerID');

// If there is no stored ID, this is the customer's first visit
if (!customerID) {
    // Create a new ID
    customerID = 'cus_' + new Date().getTime();
    // Store the new ID
    localStorage.setItem('customerID', customerID);
}
