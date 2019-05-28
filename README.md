# วิธีการใช้จ้า

อันดับแรกคือเราจะมาบอกรูปแบบในการกรอกข้อมูลลงในไฟล์ [data.txt](data.txt)

- รู้จักตำแหน่งต่างๆภายในไฟล์

อันนี้คือเดือนจ้า เดือน 4 อ่ะ เมษายนอ่ะ สงกรานอ่ะ u know?
![month](https://user-images.githubusercontent.com/49481565/58468125-2c846700-8167-11e9-8775-d9f1b0e037cb.gif)

ต่อมาเป็นการบอกให้โปรแกรมรู้ว่า เดือนเมษายน นั้นมี 30 วันนะจ่ะ
![maxday](https://user-images.githubusercontent.com/49481565/58468557-f398c200-8167-11e9-90d8-18f5f0217f32.gif)

นี่เลย ! งงใช่ไหมเลขอะไร มันคือการบอกให้รู้ว่าเดือนนี้เริ่มที่วันอะไรเช่น
- วันจันทร์ = 1 และต่อไปเรื่อยๆ
![daystart](https://user-images.githubusercontent.com/49481565/58468775-630eb180-8168-11e9-858b-f99524ff695a.gif)

แล้วก็ / ไปเพื่อความเข้าใจตรงกันว่าจบการชี้แจงเกี่ยวกับเดือนแล้ว ต่อมาจะเป็นวันแล้วนะ
![endmonth](https://user-images.githubusercontent.com/49481565/58469061-f8aa4100-8168-11e9-9030-2a7f21dc12c7.gif)



![decoration-example](https://cloud.githubusercontent.com/assets/69169/3518389/d9a8344e-06ff-11e4-9283-c32c9d99e0c1.gif)

## What is the Decoration API?

It's common when writing packages to annotate, or decorate lines, gutter line numbers, and highlight ranges of text. The decoration API allows you to add CSS classes and styling to these line, gutter line numbers, and regions of text.

Several packages use decorations: [git-diff] (for gutter diff indicators), [bookmarks] (for gutter book mark indicators), and [find-and-replace] (for boxes around found search terms). Decorations are even used in the core editor: selections (the colored selection regions are decorations), and the highlight in the gutter indicating which line the cursor is on.

## The code

The interesting bits of this package are in the [decoration-example-view]. Here is a summary:

### Creating a decoration

```coffee
range = editor.getSelectedBufferRange()
marker = editor.markBufferRange(range, invalidate: 'never')
editor.decorateMarker(marker, type: 'line', class: "my-line-class")
```

### Updating a decoration

You can change the class on a decoration if you like:

```coffee
decoration.setProperties(type: 'line', class: 'some-other-class')
```

### Destroying a decoration

There are two ways to destroy a decoration. If you own the marker and will no longer need it, you can destroy the marker, and the decoration will be destroyed. Destorying the marker is the recommended way of destroying a decoration.

```coffee
marker.destroy()
```

If you still need the marker after the decoration has been destroyed, you can destroy the decoration directly.

```coffee
decoration.destroy()
```

## Styling

There is no default styling for decorations. See the [stylesheet] for examples.

## Testing

Your package using decorations will likely need to test that the proper decorations are in place. This package's [specs] will help you test your package.


[git-diff]:https://github.com/atom/git-diff
[find-and-replace]:https://github.com/atom/find-and-replace
[bookmarks]:https://github.com/atom/bookmarks
[decoration-example-view]:https://github.com/atom/decoration-example/blob/master/lib/decoration-example-view.coffee#L40
[stylesheet]:https://github.com/atom/decoration-example/blob/master/styles/decoration-example.less
[specs]: https://github.com/atom/decoration-example/blob/master/spec/decoration-example-spec.coffee#L33
