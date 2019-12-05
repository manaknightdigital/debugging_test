# Codeigniter Challenge
This test will test your knowledge of codeigniter.
The key characteristics we are looking for are:
- You can follow instructions
- You have correct English spelling throughout the code
- You are following all the Codeigniter Coding Standards as you code. [Link](https://codeigniter.com/user_guide/general/styleguide.html?highlight=style)
- You are able to research and debug a problem by yourself
- You understand how to encapsulate code so it's easier to change in future

Task
You will make an ecommerce store that sells albums. For this test, the id will be the price of the album.

1. Go to https://jsonplaceholder.typicode.com/ and learn how their fake api works
2. Make a page http://localhost/store that displays your store. On your store, 
you will show cards of the album with title, price and a button to buy. 3 cards per row. 
Should work on mobile as well. You will pull albums from the jsonplaceholder api to display them.
3. Integrate store with [Stripe](https://stripe.com/docs/payments/accept-a-payment#php) so when they click buy, 
it gets processed by stripe and you save a record of payment in database.
4. Once processed payment, show thank you page.
5. Make a fake Email service that sends reciept(But really just error_log email). 
This Email service can be substituted for the real one anytime.

Once you have completed the task, send us the coding challenge github link.
