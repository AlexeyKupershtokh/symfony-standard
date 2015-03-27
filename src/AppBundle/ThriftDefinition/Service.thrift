namespace php AppBundle.ThriftModel

enum State {
    STATE_ZERO  = 0,
    STATE_UN    = 1,
}

struct Test {
    1: i32 id,
    2: string content
}

exception InvalidValueException {
    1: i32 error_code,
    2: string error_msg
}

service Service {
    i32 add(1: i32 a, 2: i32 b),
    void ping(),
    Test get(1: i32 id) throws (1: InvalidValueException e),
    list<Test> getList(1: i32 id) throws (1: InvalidValueException e),
    i32 create(1: Test test) throws (1: InvalidValueException e)
}
