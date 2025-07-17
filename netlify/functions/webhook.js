export async function handler(event, context) {
  if (event.httpMethod !== 'POST') {
    return {
      statusCode: 405,
      body: 'Method Not Allowed',
    };
  }

  try {
    const body = JSON.parse(event.body);
    console.log('Webhook event:', body);

    return {
      statusCode: 200,
      body: JSON.stringify({ message: 'Webhook received!' }),
    };
  } catch (err) {
    console.error('Error parsing webhook:', err);
    return {
      statusCode: 400,
      body: 'Invalid JSON',
    };
  }
}
