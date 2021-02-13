FROM rabbitmq:3-management

COPY ./rabbitmq.conf /etc/rabbitmq/rabbitmq.conf
COPY ./definitions.json /etc/rabbitmq/definitions.json

RUN chmod a+rwx -R etc && \
    # chmod a+rwx -R log && \
    chmod a+rwx -R lib

EXPOSE 4369 5671 5672 15671 15672 25672