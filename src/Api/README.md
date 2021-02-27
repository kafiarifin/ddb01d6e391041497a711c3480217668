# REST API Documentation

## Create Mail

If you want to create a mail the request can be written in URL format as:

    POST /mail

You have to send a body containing:

    {
        "to": "mail@mail.com",
        "subject": "test send email",
        "body": "content your mail"
    }

And it will return the value of the primary key of the newly created mail:

    {
        "message": "success",
        "id": 1
    }

## Send Mail

To send a mail the request can be written in URL format as:

    POST /mail/1/send

## Read Mail

To read a mail the request can be written in URL format as:

    GET /mail/1

Where "1" is the value of the primary key of the mail that you want to read. It will return:

    {
        "to": "mail@mail.com",
        "subject": "test send email",
        "body": "content your mail"
    }

## List Mails

To list mails the request can be written in URL format as:

    GET /mails

It will return:

    {
        "id": 1,
        "to": "mail@mail.com",
        "subject": "test send email",
        "body": "content your mail",
        "status": "SENT"
    }, {
        "id": 2,
        "to": "mail@mail.com",
        "subject": "test send email",
        "body": "content your mail",
        "status": "DRAFT"
    }, {
        ...
    }