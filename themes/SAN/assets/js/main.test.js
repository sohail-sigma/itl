const rewire = require("rewire")
const main = rewire("./main")
const itl = main.__get__("itl")
// @ponicode
describe("itl.setPush", () => {
    test("0", () => {
        let result = itl.setPush("https://")
        expect(result).toMatchSnapshot()
    })

    test("1", () => {
        let result = itl.setPush("Www.GooGle.com")
        expect(result).toMatchSnapshot()
    })

    test("2", () => {
        let result = itl.setPush("http://www.example.com/route/123?foo=bar")
        expect(result).toMatchSnapshot()
    })

    test("3", () => {
        let result = itl.setPush("ponicode.com")
        expect(result).toMatchSnapshot()
    })

    test("4", () => {
        let result = itl.setPush("")
        expect(result).toMatchSnapshot()
    })

    test("5", () => {
        let result = itl.setPush(undefined)
        expect(result).toMatchSnapshot()
    })
})
